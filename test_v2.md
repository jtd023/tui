# Musement | Backend tech homework
  Musement API has the endpoint GET /api/v3/cities that returns the cities where Musement has activities to sell. We now need to add weather information for each city available in Musement's catalogue.

#### Step 1 | Development
  The candidate must write an application that:
      gets the list of the cities from Musement's API
      for each city gets the forecast for the next 2 days using http://api.weatherapi.com and print to STDOUT "Processed city [city name] | [weather today] - [wheather tomorrow]"

  *Example:*
  > Processed city Milan | Heavy rain - Partly cloudy
  >
  > Processed city Rome | Sunny - Sunny

#### Step 2 | API design (no code required)

  Now that we have a service that reads the forecast for a city, we want to save this info in the Musement's API. The endpoint that receives information about weather for a city **does not exist**, we only have these 2 endpoints for cities

  ```
  GET /api/v3/cities
  GET /api/v3/cities/{id}
  ```

  Please provide the design for:
  - endpoint/s to set the forecast for a specific city
  - endpoint/s to read the forecast for a specific city

  Please consider that we need to answer questions like : 

   - What's the weather in [city] for today ?
   - What's the weather in [city] for tomorrow ? 
   - What's the weather in [city] for [day] ?

  For each endpoint provide all required information: endpoint, payload, possible responses etc and description about the behavior.

#### Notes:
  - weatherapi.com has a free plan. Create your own account to get a key
  - we suggest to use the call http://api.weatherapi.com/v1/forecast.json?key=[your-key]&q=[lat],[long]&days=2 to get the forecast for a city but feel free to use the one you prefer
  - we are only interested in the information under "condition" from weatherapi.com
  - OpenAPI specs for Musement's API are here https://api.musement.com/swagger_3.5.0.json
  - let's pretend that all the Musement cities are returned by `GET /api/v3/cities` and you don't need to paginate
  - latitude and longitude set for cities in Musement database are not always accurate. For Amsterdam we have 52.374 and 4.9 so when you query weatherapi.com using these values you get "De Wallen". Let's forget about this and let's pretend it is ok

## Evaluation

#### How and what we evaluate and some general hints

   - We do not consider the resolution time an important element
   - We do not evaluate only code but the solution as a whole
   - Feel free to attach a document to the solution to explain/describe your design/implementation choices
   - Develop the test as you should release it as OSS on GitHub

#### Must and nice to have

  A good test:

   - Must have a clear README with all needed info about the project
   - Must have a consistent coding standard and a tool configured to prove it 
   - Must have a clear GIT history that let people understand the evolution of the project
   - Should have a static code analyser with the higher level possible (for interpreted languages)
   - Should have a good test coverage that allows people to change pieces of code without being afraid to introduce/reintroduce bugs
   - Should provide a docker environment to easely setup the needed dev environment

## Sharing

  ***VERY IMPORTANT*** Specify in the README:

   - your name and surname
   - If you are going to work for TUI Musement through a consulting company please specify the name of the company 

  You can share your work with one of these accounts.

  * Github:
      * https://github.com/hpatoio/
      * https://github.com/AlbertoBarba
  * Gitlab:
      * https://gitlab.com/hpatoio
      * https://gitlab.com/alberto.barba
  * Bitbucket:
      * https://bitbucket.org/hpatoio/
      * https://bitbucket.org/AlbertoBarbaMUS
