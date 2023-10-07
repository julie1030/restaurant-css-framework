// Import our custom CSS
import '../scss/style.scss'

// Import all of Bootstrap's JS
import * as bootstrap from 'bootstrap'

import { getNavigation } from './navigation.js'
import { pagination } from './pagination.js'

const navigation = getNavigation()

document.getElementById('navigation').innerHTML = navigation
document.getElementById('pagination').innerHTML = pagination

