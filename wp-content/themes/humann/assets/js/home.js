/**
 * Humann home page scroll story.
 * Vanilla JS, one rAF-throttled scroll loop. Respects prefers-reduced-motion
 * and the pause button in the nav.
 */
( function () {
	'use strict';

	const root = document.documentElement;
	const reduce = window.matchMedia( '(prefers-reduced-motion: reduce)' );
	const mobile = window.matchMedia( '(max-width: 767px)' );
	const clamp = ( v, a = 0, b = 1 ) => Math.min( b, Math.max( a, v ) );
	const $ = ( s, c = document ) => c.querySelector( s );
	const $$ = ( s, c = document ) => Array.from( c.querySelectorAll( s ) );

	/** Progress of an element through a pinned scroll range: 0 at top, 1 at end. */
	const pinProgress = ( el ) => {
		const r = el.getBoundingClientRect();
		const range = r.height - window.innerHeight;
		return range > 0 ? clamp( -r.top / range ) : 0;
	};

	/* ---------- Horizontal "How it started" ---------- */
	const hs = $( '[data-hm-hscroll]' );
	const track = hs && $( '[data-hm-track]', hs );
	const traces = hs ? $$( '[data-hm-trace]', hs ) : [];
	let hsDistance = 0;

	function sizeHScroll() {
		if ( ! hs ) {
			return;
		}
		if ( mobile.matches ) {
			hs.style.height = '';
			track.style.transform = '';
			traces.forEach( ( t ) => t.style.setProperty( '--t', 1 ) );
			hsDistance = 0;
			return;
		}
		hsDistance = Math.max( 0, track.offsetWidth - window.innerWidth );
		hs.style.height = hsDistance + window.innerHeight + 'px';
	}

	function updateHScroll() {
		if ( ! hs || mobile.matches ) {
			return;
		}
		const shift = pinProgress( hs ) * hsDistance;
		track.style.transform = `translate3d(${ -shift }px,0,0)`;
		const reveal = shift + window.innerWidth * 0.82;
		traces.forEach( ( t ) => {
			t.style.setProperty( '--t', reduce.matches ? 1 : clamp( ( reveal - t.offsetLeft ) / t.offsetWidth ) );
		} );
	}

	/* ---------- Pinned Nitric Oxide stage ---------- */
	const pins = $$( '[data-hm-pin]' );
	function updatePins() {
		pins.forEach( ( p ) => {
			const stage = $( '.hm-no__stage', p ) || p;
			stage.style.setProperty( '--p', reduce.matches ? 1 : pinProgress( p ).toFixed( 4 ) );
		} );
	}

	/* ---------- Timeline line draw ---------- */
	const tl = $( '[data-hm-timeline]' );
	function updateTimeline() {
		if ( ! tl ) {
			return;
		}
		const r = tl.getBoundingClientRect();
		const p = clamp( ( window.innerHeight * 0.6 - r.top ) / ( r.height - 470 ) );
		tl.style.setProperty( '--tl', reduce.matches ? 1 : p.toFixed( 4 ) );
	}

	/* ---------- Parallax ---------- */
	const parallax = $$( '[data-hm-parallax]' );
	function updateParallax() {
		if ( reduce.matches ) {
			return;
		}
		const mid = window.innerHeight / 2;
		parallax.forEach( ( el ) => {
			const r = el.getBoundingClientRect();
			if ( r.bottom < -200 || r.top > window.innerHeight + 200 ) {
				return;
			}
			const f = parseFloat( el.dataset.hmParallax ) || 0.1;
			el.style.transform = `translate3d(0,${ ( ( r.top + r.height / 2 - mid ) * f ).toFixed( 1 ) }px,0)`;
		} );
	}

	/* ---------- Scrollspy for the pill nav ---------- */
	const pills = $$( '.hm-pill' );
	const targets = pills.map( ( a ) => document.getElementById( a.hash.slice( 1 ) ) );
	function updateSpy() {
		let active = 0;
		targets.forEach( ( t, i ) => {
			if ( t && t.getBoundingClientRect().top <= window.innerHeight * 0.4 ) {
				active = i;
			}
		} );
		pills.forEach( ( a, i ) => {
			a.classList.toggle( 'is-active', i === active );
			if ( i === active ) {
				a.setAttribute( 'aria-current', 'true' );
			} else {
				a.removeAttribute( 'aria-current' );
			}
		} );
	}

	/* ---------- Scroll loop ---------- */
	let ticking = false;
	function frame() {
		ticking = false;
		updateHScroll();
		updatePins();
		updateTimeline();
		updateParallax();
		updateSpy();
	}
	function onScroll() {
		if ( ! ticking ) {
			ticking = true;
			requestAnimationFrame( frame );
		}
	}
	function onResize() {
		sizeHScroll();
		frame();
	}

	/* ---------- Reveal on enter + count-up ---------- */
	function countUp( el ) {
		const end = parseInt( el.dataset.hmCount, 10 );
		if ( reduce.matches || ! end ) {
			return;
		}
		const t0 = performance.now();
		const step = ( t ) => {
			const k = clamp( ( t - t0 ) / 1200 );
			el.textContent = Math.round( end * ( 1 - Math.pow( 1 - k, 3 ) ) );
			if ( k < 1 ) {
				requestAnimationFrame( step );
			}
		};
		requestAnimationFrame( step );
	}
	const io = new IntersectionObserver(
		( entries ) => {
			entries.forEach( ( e ) => {
				if ( ! e.isIntersecting ) {
					return;
				}
				e.target.classList.add( 'is-in' );
				$$( '[data-hm-count]', e.target ).forEach( countUp );
				io.unobserve( e.target );
			} );
		},
		{ rootMargin: '0px 0px -12% 0px' }
	);
	$$( '.hm-reveal, .hm-slice, [data-hm-grow]' ).forEach( ( el ) => io.observe( el ) );

	/* ---------- Advisory board: clone cards for a seamless loop ---------- */
	$$( '[data-hm-carousel-track]' ).forEach( ( list ) => {
		Array.from( list.children ).forEach( ( li ) => {
			const c = li.cloneNode( true );
			c.setAttribute( 'aria-hidden', 'true' );
			list.appendChild( c );
		} );
	} );

	/* ---------- Pause button ---------- */
	const pause = $( '[data-hm-pause]' );
	if ( pause ) {
		pause.addEventListener( 'click', () => {
			const on = pause.getAttribute( 'aria-pressed' ) !== 'true';
			pause.setAttribute( 'aria-pressed', String( on ) );
			pause.setAttribute( 'aria-label', on ? 'Play animations' : 'Pause animations' );
			root.classList.toggle( 'hm-paused', on );
		} );
	}

	window.addEventListener( 'scroll', onScroll, { passive: true } );
	window.addEventListener( 'resize', onResize );
	mobile.addEventListener( 'change', onResize );
	window.addEventListener( 'load', onResize );
	onResize();
} )();
