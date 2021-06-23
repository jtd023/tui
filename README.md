### PERSONAL INFO
Javier Teodoro Díaz

### COMPANY INFO
Consulting Company => DigiHunting

### CODE DESCRIPTION

#### index.php
the file where the routes are defined

#### class Routes
methods for the routing in the API

#### class Cities
all methods for the API are stored in this class

#### __construct
set the data into cities array

#### main
get all the cities search the weather for today and tomorrow and print that data into the terminal

#### weather 
call to the weatherapi and search the weather base on the days given

#### cities 
print a list of all the cities from musement API into the terminal

#### api
make a get request to the url provide

#### read
GET enpoint, needs a city name and days to return the weather in json format

#### day 
returns the number of days in case of today or tomorrow

#### city 
get all the data from a city

### HOW TO USE CODE

#### main 
in terminal "php cities.php"

#### read 
GET endpoint "read/{city}/{day}" => exmple "read/Amsterdam/today"