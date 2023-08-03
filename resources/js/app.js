import { gsap } from 'gsap'
import * as ScrollTrigger from 'gsap/ScrollTrigger'
import Alpine from 'alpinejs'
import './fonts'
import.meta.glob(['../images/**', '../svg/**'])

// GSAP
gsap.registerPlugin(ScrollTrigger)
window.gsap = gsap

// Alpine
window.Alpine = Alpine
Alpine.start()