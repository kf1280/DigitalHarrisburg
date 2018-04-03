# Digital Harrisburg
The mission of the Digital Harrisburg Initiative is “to provide a public
resource for learning about and understanding Harrisburg, build community and
institutional connections across the region, and deepen students understanding
of history, the humanities, and digital technology.” This initiative began in
the spring of 2014, when David Pettegrew’s Digital History class was inspired
to take information from Harrisburg’s census data of 1900 and apply it to a
historical atlas of the city to detail information on religious organizations
and the history of African-American life in Harrisburg. During the following
semesters, the initiative gained more support from other faculty members and
college courses in Messiah College’s history department to gather data and
create detailed information on the 1910 and 1920 census data as well. This
information gathering has allowed the Digital Harrisburg team to partner with
churches, historical societies, and events occurring in Harrisburg to create
accurate historic records and share Harrisburg’s rich past with our digital 
community.

## Application Structure
This Digital Harrisburg application is built using the PHP Development Stack
with Laravel 5.2, Apache, PHP, MySQL, phpMyAdmin and Composer preinstalled. It
makes use of Laravel's Blade templating engine and Eloquent Database ORM. It
interfaces with jQuery and Bootstrap for styling and dynamic functionality,
and Leaflet.js to render maps and overlays. The user authorization and 
authentication is built on top of Laravel's default authorization assets.

### Model
The models of the database are built using Eloquent's standard model library.
All models can be found under the \App directory and are named in singular
titlecase of the name of the corresponding database table. The corresponding
database tables are set up through Laravel migrations, found in the directory
\Database\Migrations. Sample data is set up in each table (save for the 
Password Resets table) through Laravel Seeds, found in the directory
\Database\Seeds.

### View
The views of the database are built with the Blade templating engine. All views
can be found in the \Resources\Views directory, separated into folders based on
page relations. The master template of the application can be found under
\Resources\Views\Layouts directory as app.blade.php. This file sets up the 
header and the footer, as well as references to any external CSS and JavaScript
files necessary for the application to run. The header and footer markup can be
found under the \Resources\Views\Partials directory. Custom CSS styling can be 
found under the \Public\Styles directory, and custom JavaScript can be found 
under the \Public\Scripts directory. All other templates extend the master 
template. Views are linked and controlled by Laravel's routing. All routes
are described in the \App\Http\routes.php file.

### Controller
The controllers of this application are built using standard Laravel 
controllers. All controllers can be found under the \App\Http\Controllers
directory. 

## Application Pages
The Digital Harrisburg application strives to offer digital museum exhibits
based off of research and study performed by the Center for Public Humanities.
To fulfill this goal, data is presented in four distinct methods: Blogs,
Features, Maps, and Collections.

### Blog
The blog portion of the Digital Harrisburg applcation is a standalone feature
of the application; it does not connect to the Features, Maps, or Collections 
components of the website. Blog posts are intended to describe updates on the
research and study of the Digital Harrisburg team, concepts used or discovered
during research on projects, and interesting snapshots of Harrisburg's facts
and history. Blog posts are attached to the user who posted them, but an author
can also be given if a user posts an article for another person. Users can edit
and delete their own posts, and admins can edit and delete all posts.

### Features
Features are digital representations of singular museum exhibits. A feature
displays a title, author, date, image, and description of the corresponding
topic. Features are an essential method of compartmentalizing research findings
for dissemination to the public. Multiple related features can be grouped
together under one collection alongside maps to create a gallery under one 
related topic. Features can be created and edited from the dashboard page.
Highlighted features are displayed on the home page.

### Maps
Maps show visual representations of charts of Harrisburg and the surrounding
area. Points can be plotted on maps as singular markers or shapes to
represent key areas related to the topic to which that map corresponds.
Pop-up modals can be attached to points to further describe aspects such as 
buildings and landmarks found at that location at a specific point in time
to give the user a visual and directional sense of locations and events
as they happened within the city of Harrisburg. One map can display many
markers, modals, and shapes. Multiple maps can be grouped under one collection
alongside features to create a gallery under one related topic. Maps can be 
created and edited from the dashboard page.

### Collections
Collections are groupings of maps and features under a shared theme or research
topic. They serve as a simple method of compartmentalizing data posted on the
Digital Harrisburg application, both in organizational and visual means. On the
Collections page, maps and features are displayed in small modules, allowing
the user to see an overview of every exhibit featured within that collection
and providing links to individual maps or features. Collections can be edited 
from the dashboard page.

