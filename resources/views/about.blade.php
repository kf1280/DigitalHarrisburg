@extends('layouts.app')

@section('title', '- About')

@section('content')
<div class="container-fluid">
  <div class="row">
    <div class="col-md-12 px-0">
       <div class="jumbotron jumbotron-fluid"
            style="background-image: url('../../public/images/team2.jpg'); 
                   background-size: 100% 100%;
                   min-height: 400px;">
        <div class="container">
          <h1 class="display-4 text-white" 
              style="margin-top: 8%; 
                     text-shadow: -1px 0 black, 0 1px black, 1px 0 black, 0 -1px black;">
            Digital Harrisburg</h1>
        </div>
      </div>
    </div>
  </div>
  
  <div class="row px-4">
    <div class="col-md-12">
      <p>This website is devoted to the Digital Harrisburg Initiative, a 
        digital public humanities project, or series of projects, created by
        students and faculty of Messiah College and Harrisburg University of
        Science and Technology that explore the history and culture of the 
        Harrisburg area. The Digital Harrisburg Initiative is intended to 
        provide a public resource for learning about and understanding 
        Harrisburg, build community and institutional connections across the
        region, and deepen students understanding of history, the humanities,
        and digital technology. This website and blog is the public outlet for
        that initiative and is populated with content created by the students
        and faculty from these institutions.</p>
      
      <p>The website and the broader digitial initiative were launched through
        four classes in spring 2014. Professor David Pettegrew’s Digital
        History class used the site to report on student archival research
        related to Harrisburg’s successful City Beautiful Movement, and the
        digitization of federal census data for the city in 1900 and a
        contemporary historical atlas of the city. Professor Jeff Erikson of
        Messiah College and Professor Albert Sarvis of Harrisburg University
        worked with their GIS courses to begin to digitize the 1901 atlas and
        relate the census data to geocoded addresses in GIS. Dr. John Fea and
        his students in Pennsylvania History conducted archival research
        related to the region’s churches, cultural and religious organizations,
        and African-American history. These courses populated this site with 
        new material, spawned an Omeka website devoted to City Beautiful,
        created a database of information about half the population of the city
        in 1900, and digitized several of the wards in GIS.</p>

      <p>The initiative continued in 2014 and 2015 through the newly created
        Digital Harrisburg working group, a small team of faculty and students
        from both institutions (Professors David Pettegrew, Jeff Erikson, and 
        Albert Sarvis, and history and GIS students Rachel Carey, David Crout,
        Rachel Morris, James Mueller, and Dan Stolyarov) that sought to develop
        the demographic datasets. Additional courses in Pennsylvania History
        (Fea) and U.S. Urban History (LaGrand) also contributed church 
        membership data for the Market Square Presbyterian Church in 1900,
        helped to standardize the messy occupations and industry data from the
        federal census, and drafted a history of Catholicism in Harrisburg 
        between 1900 and 1910 based on news pieces harvested from The Patriot 
        and The Telegraph.</p>
       </div>
  </div>
  
  <div class="row">
    <div class="col-md-12 px-0">
       <div class="jumbotron jumbotron-fluid mb-3"
            style="background-image: url('../../public/images/team1.jpg'); 
                   background-size: 100% 100%;
                   min-height: 400px;">
      </div>
    </div>
  </div>
  
  <div class="row px-4">
    <div class="col-md-12">
      <p>To date, the working group has completed the input of the 1900 
        census data, the associated GIS data for a contemporary map, 1910
        federal census data, and an interactive map of the population and 
        buildings of the city in 1900/1901. In the 2015-2016 academic year,
        we will continue to fine-tune and normalize all data sets, add
        property values for 1900, and input the 1920 federal census. The 
        Digital History course will also be working again on the City 
        Beautiful project by adding new imagery and spatial analysis of the
        movement at the Omeka website.</p>

      <p>As we have implemented student projects for these courses, we have
        connected with faculty and students in other courses and 
        institutions, historical societies in the region, community partners,
        and individuals well-versed in Harrisburg’s history. In the future,
        we hope to use this dynamic website to include input from other
        academic departments and community partners. If you would like to
        connect with us in this initiative, please contact David Pettegrew
        or Albert Sarvis.</p>
    </div>
  </div>
</div>
@endsection