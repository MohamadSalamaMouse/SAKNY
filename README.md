<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Introduction
String manipulation is a concept beneath NLP's general term, which refers to the process of changing or modifying strings, in order to manipulate
data or text and reach the required format.

##### String-manipulation can be used to perform small actions like:

<img align="right" alt="GIF" height="160px" src="https://media.giphy.com/media/du3J3cXyzhj75IOgvA/giphy.gif" /> 

- Rearranging white spaces
- Positioning punctuation marks


##### String-manipulation also involve more complicated tasks like:
- Removing duplicated words
- Correcting spelling and grammar rules
- Finding substrings & concatenating strings


<h3 align="center"> What we are trying to do here is  creating a command line interface -Text Editor- which also has the ability to perform some string manipulation techniques</h3>

---

##  STRINGIFY Documentation
STRINGIFY is a String manipulation program that we developed in 8086 assembly language to perform some common text manipulation processes.

STRINGIFY program consists of main.asm file where we reference and include all other files and functions and we also have four files more which are :
<ol dir="auto">
<li>
<p dir="auto"><strong>ui.inc ------->></strong>The main file used for rendering the program, also includes rendering related functions such as function implement delay.</p>
</li>

<li>
<p dir="auto"><strong>caps.inc  ---->></strong>Includes functions to capitalize the beginning of the sentence and be sure that the rest of the sentence litters is lowercase.</p>
</li>

<li>
<p dir="auto"><strong>spaces.inc  -->></strong>Includes functions to remove extra white spaces  and also add white space after common punctuation marks.</p>
</li>

<li>
<p dir="auto"><strong>dups.inc ---->></strong>Includes functions to remove successive duplicates words.</p>
</li>

<li>
<p dir="auto"><strong>files.inc ---->></strong>Includes functions to handle and deal with files.</p>
</li>

</ol>



| Program Flow-chart  (use case)                                                                                                               | 
|----------------------------------------------------------------------------------------------------------------------------------------------|
| <img src="https://github.com/MohamadSalamaMouse/Natural-Language-Processing/blob/main/resources/Photos/Activitydiagram1.png" width="1000" /> | 


### Implemented Features
- Multi Auth 
- CRUD Operation
- file Upload
- validation
- Seeder
- Migrations
- Factory
- testing (unit test)
- Api
   
---

## Screenshots

Add Property            |  view Property
:-------------------------:|:-------------------------:
<img src="https://github.com/MohamadSalamaMouse/SAKNY/blob/main/public/Images_App/Add_Property.jpeg" width="500" />  |    <img src="https://github.com/MohamadSalamaMouse/SAKNY/blob/main/public/Images_App/listing.jpeg" width="500" />

Property Details            |  Dashboard
:-------------------------:|:-------------------------:
<img src="https://github.com/MohamadSalamaMouse/SAKNY/blob/main/public/Images_App/property_details.jpeg" width="500" />  |    <img src="https://github.com/MohamadSalamaMouse/SAKNY/blob/main/public/Images_App/dashboard.jpeg" width="500" />


## Run Locally

1- Clone the project

```bash
  git clone https://github.com/MohamadSalamaMouse/SAKNY.git
```

2- to run project after clone 

```bash
  1 - run composer install
  2 - change .env.example to .env
  3 - run php artisan key:generate
  4 - configure .env
```


---
## Demo video
To get more information we uploaded a demo video for more explanation, which you can access by pressing [Here](https://youtu.be/kI8BZYBD8H0)
