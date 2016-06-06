<?php

function formatDate($date) {
	return strftime("%d %B %Y",strtotime($date));
}