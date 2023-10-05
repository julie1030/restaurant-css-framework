// Import our custom CSS
import '../scss/style.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

import { getNavigation } from './navigation.js'
import { pagination } from './pagination.js'

import logoUrl from '../assets/139.png'

const assets = { logoUrl }
const navigation = getNavigation(assets)

document.getElementById('navigation').innerHTML = navigation
document.getElementById('pagination').innerHTML = pagination

