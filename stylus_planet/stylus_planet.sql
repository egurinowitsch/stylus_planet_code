USE db445706707;

CREATE TABLE stylus_table (
	id int PRIMARY KEY auto_increment,
	product_name char(30),
	price DEC(6,2),
	descr text,
	small_descr text,
	img_thumb char(50),
	img_large char(50)	
) ENGINE=InnoDB AUTO_INCREMENT=24565;

INSERT INTO stylus_table
	VALUES
	(NULL, "Stylus Rx", 24.95, "On the go stylus, lightweight 
	and durable. Turn your ipad or any touch device into a canvas 
	or notepad. With the smooth and responsive usability, it is like 
	using a real pen.", "On the go stylus, lightweight 
	and durable.", "rx_thumb.jpg", "rx_large.jpg"),
	(NULL, "Stylus GT/2", 27.95, "Two for one stylus. Same responsive 
	and fluid usability as the Stylus Rx. When you are done using the 
	stylus on your touch device, flip it over and use the traditional 
	pen to take notes or sketch on regular paper.", "Same responsive 
	and fluid usability as the Stylus Rx.", "gt_thumb.jpg", "gt_large.jpg"),
	(NULL, "Stylus LX", 22.95, "Simple and traditional stylus used for 
	making your creativity come to life in the digital universe. 
	Typical use is sketching, drawing and note taking on any 
	touch device.", "Typical use is sketching, drawing and note taking.", "lx_thumb.jpg", "lx_large.jpg"),	
	(NULL, "Sketch Pen 500", 127.95, "Capture your sketches digitally with 
	the Sketch Pen 500. This unit allows you to draw on paper with the use 
	of multiple layers to later use on common illustrating or photo software. 
	You can even save your drawings as common file extensions such as jpeg 
	or png.", "Capture your sketches digitally with 
	the Sketch Pen 500.", "sketch_thumb.jpg", "sketch_large.jpg"),
	(NULL, "Pen Tab 1.2", 189.95, "Most popular pen tablet of our line. Easy 
	to use and compatible with all photo and illustration software. Touch 
	input features scrolling, zooming and rotating your screen.", "Easy 
	to use and compatible with all photo and illustration software.", 
	"one_two_thumb.jpg", "one_two_large.jpg"),
	(NULL, "Pen Tab 1.8", 198.95, "Draw, sketch, create. The Pen Tab 1.8 is 
	great for digital painting and creating digital artwork with the feel 
	of using a traditional medium with the wireless stylus.", "The Pen Tab 1.8 is 
	great for digital painting.", "one_eight_thumb.jpg", 
	"one_eight_large.jpg"),
	(NULL, "Pen Tab 2.1", 275.99, "With 48.4 square inches of working space, the 
	Pen Tab 2.1 is perfect for design professionals looking for professional 
	results. Easy to use multi-touch functions and pressure sensitive pen.",
	"The Pen Tab 2.1 is perfect for design professionals.",
	"two_one_thumb.jpg", "two_one_large.jpg"),
	(NULL, "Pen Tab 2.8", 310.85, "The Pen Tab 2.8 has an extra-large working space 
	of 218 square inches, perfect for professionals who prefer a large digital 
	canvas. This tablet makes the creation of digital art and paintings a breeze.",
	"The Pen Tab 2.8 has an extra-large working space 
	of 218 square inches.", "two_eight_thumb.jpg", "two_eight_large.jpg"),
	(NULL, "Office Tab 360", 1585.98, "This interactive pen display is perfect 
	for office professionals. The Office Tab 360 has a 17-inch display with 
	1280 x 1024 resolution as well as an easy hook-up to overhead projectors. 
	Take notes in a meeting, accept signatures, sketch ideas or give presentations 
	like a pro.", "This interactive pen display is perfect 
	for office professionals.", "threesixty_thumb.jpg", "threesixty_large.jpg"),
	(NULL, "Display Pro 680", 1999.95, "The Display Pro 680 is a 21.5 inch HD 
	Widescreen LCD equipped with pen input capabilities. Professional's choice 
	for photo editing, illustrations, digital paintings and animations. The 
	Display Pro 680 is designed to tilt and rotate to make you the most comfortable 
	while you are creating your next masterpiece.", "The Display Pro 680 is a 21.5 inch HD 
	Widescreen LCD.", "sixeighty_thumb.jpg", "sixeighty_large.jpg");
	
	
SELECT * FROM stylus_table;	