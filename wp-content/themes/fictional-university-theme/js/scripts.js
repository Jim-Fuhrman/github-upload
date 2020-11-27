import React from 'react'
import ReactDOM from 'react-dom'

import "../css/style.css"


// Our modules / classes
import MobileMenu from "./modules/MobileMenu"
import HeroSlider from "./modules/HeroSlider"
import GoogleMap from "./modules/GoogleMap"
import Search from "./modules/Search"
import MyNotes from "./modules/MyNotes"
import Like from "./modules/Like"

//our React Code
function OurFirstComponent() {
  return (
    <div>
      <h1>Hello world</h1>
      <p>Ain't life grand? (React msg)</p>
    </div>
  )
}
ReactDOM.render(<OurFirstComponent />, document.querySelector("#app"))

// Instantiate a new object using our modules / classes
const mobileMenu = new MobileMenu()
const heroSlider = new HeroSlider()
const googleMap = new GoogleMap()
const magicalSearch = new Search()
const mynotes = new MyNotes()
const like = new Like()

// Allow new JS and CSS to load in browser without a traditional page refresh
if (module.hot) {
  module.hot.accept()
}
