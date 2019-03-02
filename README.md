

# Car Brands DB  
![logo](./assets/images/logo.png) 

[Car Brands DB Site](http://wp-ca3-armstrong-ashley.000webhostapp.com/home)

This is a website which allows for the storing and displaying and storing of Car Brands and their accompanying Car Models. 
The Site uses a MySql database to store these Car brands and models. These can be added to, updated and deleted using the site. 

## How it works 

The site uses the MVC pattern to access, manipulate and display car information. The use of this pattern allows allows for easy access to mysql statements being able to pass them into the view through the controller. 

The database contains two tables Car_Brands and Car_Models. These store a variety of data and datatypes which can be accessed and manipulated through the view. 

## What can it do

Firstly the site can view a pre-exsisting database of car brands and car models. Every car model is linked with a brand. I.E (Model X belongs to Tesla)
This can be navigated by clicking brands and viewing them and their accompaning models.
Or you can search for a brand or model using the serch bar at the top of the [Car List](http://wp-ca3-armstrong-ashley.000webhostapp.com/car_list) page.


You can also add to the list of cr brands and models, this is done throuhg forms on the [Add brand](http://wp-ca3-armstrong-ashley.000webhostapp.com/brand_add) and [Add Model](http://wp-ca3-armstrong-ashley.000webhostapp.com/model_add).

Exsisting brands and models can be updated using the [Update Brand](http://wp-ca3-armstrong-ashley.000webhostapp.com/brand_update) and [Update Model](http://wp-ca3-armstrong-ashley.000webhostapp.com/model_update).

If required car brands and models can be deleted on the car list page.

## What I could Improve

I wouldve liked to have been able to spend more time on the checking whether values were null or not and depending on whether it was or not display the field in the view. However I have not had the time to work this out as of yet.

Aswell as this I could also work on some of validation to be more efficient and meaningful.

## Refrences

search bar
[w3schools](https://www.w3schools.com/howto/howto_css_searchbar.asp)

Rachel helped with add, delete href, the update view and the validation for years. 

The CSS is from the previous ca2.

I used the form Utils page from ca2 as a basis for this one.

I used the header and footer from ca2.

I used the forms from the views of ca2 as a basis for this ca.

### GITLAB

[gitlab](https://gitlab.comp.dkit.ie/D00213195/wp_ca3_armstrong_ashley.git)
