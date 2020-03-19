jQuery(document).ready(function($) {

	$('.submit_wrap').hide();

	$('.form-check-input').click(function(){
		if($(this).attr("value") === "cashapp") {
			$('#paypal-button-container').hide();
			$('#cash-app-container').show();
			$('.submit_wrap').show();
		} else {
			$('#paypal-button-container').show();
			$('#cash-app-container').hide();
			$('.submit_wrap').hide();
		}

		$('.form-check').removeClass('active');

		if($(this).is(':checked')) {
			$(this).parent().addClass('active');
		}
	});


});
/*

import { BrowserRouter as Router, Route, Link } from 'react-router-dom';

import React from "react";
import ReactDOM from "react-dom";
import Header from "components/header";

const App = () => (
	<Router>
		<div>
			<Header />
			<section className="section container content">
				<Route exact path="/" component={PostList} />
				<Route path="/:slug" component={PostView} />
			</section>
		</div>
	</Router>
);

ReactDOM.render(<App />, document.getElementById("app"));*/
