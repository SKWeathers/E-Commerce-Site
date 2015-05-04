<?php

$con = mysql_connect("localhost","root");

if (!$con)
{die('Could not connect: ' . mysql_error());}

mysql_select_db("silkroad_db1", $con);


$sql_cust = "CREATE TABLE customers
	(
	customer_id int NOT NULL AUTO_INCREMENT,
	username varchar(24),
	password varchar(48),
	email varchar(48),
	fname varchar(24),
	lname varchar(24),
	address varchar(128),
	city varchar(48),
	state char(2),
	zip int(5),
	UNIQUE (username),
	UNIQUE (email),
	PRIMARY KEY (customer_id)
	)";

mysql_query($sql_cust,$con);



$sql_item = "CREATE TABLE items
	(
	item_id int NOT NULL AUTO_INCREMENT,
	customer_id int NOT NULL,
	title varchar(128) NOT NULL,
	description varchar(1024),
	item_condition varchar(12),
	category varchar(24),
	price decimal(10,2) UNSIGNED,
	date_added timestamp DEFAULT CURRENT_TIMESTAMP,
	sold bool NOT NULL DEFAULT '0',
	PRIMARY KEY (item_id),
	FOREIGN KEY (customer_id) REFERENCES customers(customer_id) ON DELETE CASCADE
	)";

mysql_query($sql_item,$con);



$sql_list = "CREATE TABLE listings
	(
	listing_id int NOT NULL AUTO_INCREMENT,
	customer_id int NOT NULL,
	title varchar(128) NOT NULL,
	description varchar(1024),
	listing_type char(5) NOT NULL,
	date_added timestamp DEFAULT CURRENT_TIMESTAMP,
	sold bool NOT NULL DEFAULT '0',
	PRIMARY KEY (listing_id),
	FOREIGN KEY (customer_id) REFERENCES customers(customer_id) ON DELETE CASCADE
	)";

mysql_query($sql_list,$con);



$sql_list_item = "CREATE TABLE listing_items
	(
	listing_id int NOT NULL,
	item_id int NOT NULL,
	PRIMARY KEY (listing_id, item_id),
	FOREIGN KEY (listing_id) REFERENCES listings(listing_id) ON DELETE CASCADE,
	FOREIGN KEY (item_id) REFERENCES items(item_id) ON DELETE CASCADE
	)";

mysql_query($sql_list_item,$con);



$sql_questions = "CREATE TABLE questions
	(
	question_id int NOT NULL AUTO_INCREMENT,
	question_title varchar(128) NOT NULL,
	question_content varchar(1024),
	listing_id int NOT NULL,
	customer_id int NOT NULL,
	date_submitted timestamp DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (question_id),
	FOREIGN KEY (listing_id) REFERENCES listings(listing_id) ON DELETE CASCADE,
	FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
	)";
	
mysql_query($sql_questions,$con);



$sql_answers = "CREATE TABLE answers
	(
	answer_id int NOT NULL AUTO_INCREMENT,
	answer_content varchar(1024) NOT NULL,
	question_id int NOT NULL,
	date_submitted timestamp DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY (answer_id),
	FOREIGN KEY (question_id) REFERENCES questions(question_id) ON DELETE CASCADE
	)";
	
mysql_query($sql_answers,$con);



$sql_fixed_listings = "CREATE TABLE fixed_listings
	(
	f_listing_id int NOT NULL AUTO_INCREMENT,
	listing_id int NOT NULL,
	price decimal(10,2) UNSIGNED,
	PRIMARY KEY (f_listing_id),
	FOREIGN KEY (listing_id) REFERENCES listings(listing_id) ON DELETE CASCADE
	)";

mysql_query($sql_fixed_listings,$con);



$sql_preferred_trades = "CREATE TABLE preferred_trades
	(
	preferred_trade_id int NOT NULL AUTO_INCREMENT,
	listing_id int NOT NULL,
	description varchar(1024) NOT NULL,
	PRIMARY KEY (preferred_trade_id),
	FOREIGN KEY (listing_id) REFERENCES listings(listing_id) ON DELETE CASCADE
	)";

mysql_query($sql_preferred_trades,$con);



$sql_wishlist = "CREATE TABLE wishlist
	(
	customer_id int NOT NULL,
	listing_id int NOT NULL,
	PRIMARY KEY (customer_id, listing_id),
	FOREIGN KEY (customer_id) REFERENCES customers(customer_id) ON DELETE CASCADE,
	FOREIGN KEY (listing_id) REFERENCES listings(listing_id)
	)";

mysql_query($sql_wishlist,$con);



$sql_sales_made = "CREATE TABLE sales_made
	(
	sale_id int NOT NULL AUTO_INCREMENT,
	seller_id int NOT NULL,
	buyer_id int NOT NULL,
	listing_id int NOT NULL,
	PRIMARY KEY (sale_id),
	FOREIGN KEY (seller_id) REFERENCES customers(customer_id),
	FOREIGN KEY (buyer_id) REFERENCES customers(customer_id),
	FOREIGN KEY (listing_id) REFERENCES listings(listing_id)
	)";
	
mysql_query($sql_sales_made,$con);



$sql_trades_made = "CREATE TABLE trades_made
	(
	trade_id int NOT NULL AUTO_INCREMENT,
	seller_id int NOT NULL,
	buyer_id int NOT NULL,
	listing_id int NOT NULL,
	PRIMARY KEY (trade_id),
	FOREIGN KEY (seller_id) REFERENCES customers(customer_id),
	FOREIGN KEY (buyer_id) REFERENCES customers(customer_id),
	FOREIGN KEY (listing_id) REFERENCES listings(listing_id)
	)";
	
mysql_query($sql_trades_made,$con);



$sql_activity = "CREATE TABLE activity
	(
	activity_id int NOT NULL AUTO_INCREMENT,
	activity_description varchar(128) NOT NULL,
	PRIMARY KEY (activity_id)
	)";
	
mysql_query($sql_activity,$con);



$sql_listing_activity = "CREATE TABLE listing_activity
	(
	activity_id int NOT NULL,
	listing_id int NOT NULL,
	PRIMARY KEY (activity_id, listing_id),
	FOREIGN KEY (activity_id) REFERENCES activity(activity_id),
	FOREIGN KEY (listing_id) REFERENCES listings(listing_id)
	)";
	
mysql_query($sql_listing_activity,$con);



$sql_item_activity = "CREATE TABLE item_activity
	(
	activity_id int NOT NULL,
	item_id int NOT NULL,
	PRIMARY KEY (activity_id, item_id),
	FOREIGN KEY (activity_id) REFERENCES activity(activity_id),
	FOREIGN KEY (item_id) REFERENCES items(item_id)
	)";
	
mysql_query($sql_item_activity,$con);













mysql_close($con);

























?>