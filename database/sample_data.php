<?php

$sql_customers1 = "INSERT INTO customers (username, password, email, fname, lname, address, city, state, zip) VALUES ('StevenW', 'hello', 'stevenw@gmail.com', 'Steven', 'Weathers', '1711 Witness Tree Rd NW', 'Corydon', 'IN', '47112')";
$sql_customers2 = "INSERT INTO customers (username, password, email, fname, lname, address, city, state, zip) VALUES ('BobbyH', 'hello', 'bhill@hotmail.com', 'Bobby', 'Hill', '84 Rainey Street', 'Arlen', 'TX', '46576')";
$sql_customers3 = "INSERT INTO customers (username, password, email, fname, lname, address, city, state, zip) VALUES ('Mr Plow', 'hello', 'homerj@compuglobalhypermeganet.com', 'Homer', 'Simpson', '742 Evergreen Terrace', 'Springfield', 'HI', '98685')";
$sql_customers4 = "INSERT INTO customers (username, password, email, fname, lname, address, city, state, zip) VALUES ('StewartGG', 'hello', 'stewieg@yahoo.com', 'Stewie', 'Griffin', '31 Spooner Street', 'Quahog', 'RI', '25497')";

$sql_items1 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('1', '50 inch Sony LCD', 'Quality 50 inch Sony television. 1080p, great picture, hardly used.', 'Like New', 'Electronics', '650.00')";
$sql_items2 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('1', 'HP Mini 1000', 'Very used HP Mini 1000 netbook. Flimsy hinge, scratches on screen, but still useable.', 'Used', 'Electronics', '80.00')";
$sql_items3 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('1', 'Xbox 360', '3 year old Xbox 360. Still works fine.', 'Slightly Used', 'Electronics', '120.00')";
$sql_items4 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('1', 'Gears of War 3', 'Brand new copy of Gears of War 3. Never opened', 'New', 'Entertainment', '55.00')";
$sql_items5 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('1', 'BUS A101 Textbook', 'Textbook for Accounting 101 class. Light wear.', 'Like New', 'Books', '80.00')";
$sql_items6 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('2', 'Gamestation', '1 year old slightly used Gamestation', 'Like New', 'Electronics', '150.00')";
$sql_items7 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('2', 'Grand Theft Arlen Game', 'The best game ever made for the Gamestation', 'Like New', 'Entertainment', '40.00')";
$sql_items8 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('2', 'Probot', 'A six foot tall statue constructed of propane canisters.', 'New', 'Art', '500.00')";
$sql_items9 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('2', '32 inch Toshiba Plasma TV', 'Affordable 32 inch plasma television. Good picture quality.', 'Used', 'Electronics', '200.00')";
$sql_items10 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('3', 'MyPod 32GB', 'Old 32GB Mapple MyPod. Plays music.', 'Used', 'Electronics', '75.00')";
$sql_items11 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('3', 'Radioactive Man #1', 'Mint condition copy of Radioactive Man #1.', 'New', 'Books', '1000.00')";
$sql_items12 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('3', 'Pearl Necklace', 'Nice white pearl necklace.', 'Like New', 'Jewelry', '100.00')";
$sql_items13 = "INSERT INTO items (customer_id, title, description, item_condition, category, price) VALUES ('4', 'Time Machine', 'High quality time machine with return pad.', 'Slightly Used', 'Electronics', '10000.00')";

$sql_listings1 = "INSERT INTO listings (customer_id, title, description, listing_type) VALUES ('1', '360 plus GoW3', 'Selling an Xbox 360 and a new copy of Gears of War 3. Good deal!', 'Fixed')";
$sql_listings2 = "INSERT INTO listings (customer_id, title, description, listing_type) VALUES ('1', 'Trade 50 inch LCD for 42 inch 3D LCD', 'I want a 3D TV, and I'll trade my 50 incher for a smaller 42 incher', 'Trade')";
$sql_listings3 = "INSERT INTO listings (customer_id, title, description, listing_type) VALUES ('1', 'BUS A101 Textbook', 'Selling my A101 book. Cheaper than bookstore!', 'Fixed')";
$sql_listings4 = "INSERT INTO listings (customer_id, title, description, listing_type) VALUES ('2', 'Selling Whole Gaming Setup', 'Get a 32 inch TV, a Gamestation and GTA!', 'Fixed')";
$sql_listings5 = "INSERT INTO listings (customer_id, title, description, listing_type) VALUES ('2', 'Amazing Probot!', 'Selling original, hand made probot art. Would look great on lawn.', 'Fixed')";
$sql_listings6 = "INSERT INTO listings (customer_id, title, description, listing_type) VALUES ('3', ')";
$sql_listings7 = "INSERT INTO listings (customer_id, title, description, listing_type) VALUES ()";
$sql_listings8 = "INSERT INTO listings (customer_id, title, description, listing_type) VALUES ()";

$sql_listing_items1 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items2 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items3 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items4 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items5 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items6 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items7 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items8 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items9 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items10 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items11 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items12 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items13 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items14 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items15 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items16 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items17 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items18 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items19 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";
$sql_listing_items20 = "INSERT INTO listing_items (listing_id, item_id) VALUES ()";

$sql_fixed_listings1 = "INSERT INTO fixed_listings (listing_id, price) VALUES ()";
$sql_fixed_listings2 = "INSERT INTO fixed_listings (listing_id, price) VALUES ()";
$sql_fixed_listings3 = "INSERT INTO fixed_listings (listing_id, price) VALUES ()";
$sql_fixed_listings4 = "INSERT INTO fixed_listings (listing_id, price) VALUES ()";
$sql_fixed_listings5 = "INSERT INTO fixed_listings (listing_id, price) VALUES ()";

$sql_preferred_trades1 = "INSERT INTO preferred_trades (listing_id, description) VALUES ()";
$sql_preferred_trades2 = "INSERT INTO preferred_trades (listing_id, description) VALUES ()";
$sql_preferred_trades3 = "INSERT INTO preferred_trades (listing_id, description) VALUES ()";
$sql_preferred_trades4 = "INSERT INTO preferred_trades (listing_id, description) VALUES ()";
$sql_preferred_trades5 = "INSERT INTO preferred_trades (listing_id, description) VALUES ()";
$sql_preferred_trades6 = "INSERT INTO preferred_trades (listing_id, description) VALUES ()";
$sql_preferred_trades7 = "INSERT INTO preferred_trades (listing_id, description) VALUES ()";
$sql_preferred_trades8 = "INSERT INTO preferred_trades (listing_id, description) VALUES ()";


$sql_wishlist1 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist2 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist3 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist4 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist5 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist6 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist7 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist8 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist9 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";
$sql_wishlist10 = "INSERT INTO wishlist (customer_id, listing_id) VALUES ()";

$sql_questions1 = "INSERT INTO questions (question_title, question_content, listing_id, customer_id) VALUES ()";
$sql_questions2 = "INSERT INTO questions (question_title, question_content, listing_id, customer_id) VALUES ()";
$sql_questions3 = "INSERT INTO questions (question_title, question_content, listing_id, customer_id) VALUES ()";
$sql_questions4 = "INSERT INTO questions (question_title, question_content, listing_id, customer_id) VALUES ()";
$sql_questions5 = "INSERT INTO questions (question_title, question_content, listing_id, customer_id) VALUES ()";
$sql_questions6 = "INSERT INTO questions (question_title, question_content, listing_id, customer_id) VALUES ()";

$sql_answers1 = "INSERT INTO answers (answer_content, question_id) VALUES ()";
$sql_answers2 = "INSERT INTO answers (answer_content, question_id) VALUES ()";
$sql_answers3 = "INSERT INTO answers (answer_content, question_id) VALUES ()";
$sql_answers4 = "INSERT INTO answers (answer_content, question_id) VALUES ()";
$sql_answers5 = "INSERT INTO answers (answer_content, question_id) VALUES ()";

?>