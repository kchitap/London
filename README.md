# London
Lab 7 for Team London

## Ontology

The site is centered around 3 students. Each student has a major and a job (or two) presented.
For the two similar students the job is related to their major through the field it is in. For
the odd one out it is not related. Each student also has a random "fun fact", which is meant to
be sidebar (less important) content.

## Taxonomy

- header: for the webpage title because the text inside
  acts as a heading for the whole website
- section: for each distinct area of the page such as content 
  blocks because they are different sections of the page. I used
  sections for all of them because they represent sections of the
  F or Z layouts
- h1: For the text of the header because it is the main
  heading for the website
- nav: for the navigation between pages so that if the user
  does want to go back they can (contains ul, li, and a as per
  best practices of navigation
  
### Index page

- div: For the image in the center because it is different
  than the outer 4 sections and is not one of the Z layout 
  focal points
- h2: Is used because it is the heading for the content
  in its section but is under the main site heading
- p: is used because it is a paragraph of text under
  the h2 in its section
- footer: Is the bottom of the page with information on
  the team and the original websites of the students
  
### Student Info Page

- main: is used for the main content of the page which includes
  the student, their major, and their job
- section: there are two sections in the main, one which includes the two
  similar students because they are in the same group and one for the odd one
- h2: is used to introduce each section and clearly state if they are the similar
  students or the odd one out
- div: The divs here are for dividing content of different groups primarily for
  styling it separately
  - One is used for the information block for the student because it is a portion
    of its section
  - One is used for the student's name and picture
  - One is for the student's major
  - One is for the student's job
  - Each "fun fact" is in a div as well
- h2: is used to introduce both sections and the aside. This is because they are
  headings for their content underneath, and are separated by sections or other 
  structural tags
- h3: is used for each student's name because it is the heading for the student's info
  and is nested under which type of student they are (similar or different)
- h4: is used for the major and job headings because they are the titles for these
  sets of information and are nested under the student they belong to
- p: is used for each paragraph of text that is long enough to be a paragraph
- aside: is used as the sidebar and in an F layout it sits to the side of the
  content so an aside tag is appropriate

## Choreography

### Pages

The first page introduces the user to the page and uses a z layout to draw the user's
eye to the read more link that takes them to the second page. The second page has all of 
the content and presents this content in an F layout because it is heavier in content and 
is good for reading content.

### Index Page: Z Layout

- At the top left is the title, which is first because it explains
  the site's purpose
- This leads them to the top right, which has the navigation. This is
  slightly less important than the title, but still belongs at the top
  because it shows the user that it is a 2 page site and where they are
- Through the center is an image of "odd one out" where one figure is 
  a different color. This helps the user to understand what the site
  means by odd student out
- The bottom left has a short description of the content to begin engaging
  the user and flow them to the read more. It is vague so they will want
  to read more.
- The bottom right is the read more link, which takes the user to the 
  content page
  
### Content Page: F Layout

- The title and navigation are at the top of the page because they explain
  what the content is and how to move around it.
- The content is columnar to the sidebar, as per the F layout. 
- The content features each student's name and photo first, because it shows
  who they are, then their major and job in that order because the students
  are similar/different based on connection of a job to their major, so it 
  makes sense to know the major first
- The two similar students are in one section and placed under a heading stating
  that they are the two similar students. They are first because since the
  different student is "odd", the similar ones are the baseline or normal
- The odd student is in a separate section with a heading stating that they are
  different. They are at the end because they are the one thing that sticks out
- The content in the sidebar is on the side because white it relates to the students
  it does not directly relate to the idea that one student is the odd one out
- The footer contains information that is necessary to know, such as the creators
  and the original student pages, but is not directly connected to the content
