# OpenGig

`docker-compose up -d` <-- Create containers and start them

-----------------

`localhost` <-- Direct to nginx

`localhost:3000` <-- Browsersync proxy

`localhost:3001` <-- Browsersync dashboard thing

`localhost:8085` <-- PHPMyAdmin

---------------

A submitted payload is an edit or a Create
Just need to validate and add to the pending table

Need to be able to submit a vote +/-
Sets the first vote date if null

{
  "action" : "edit",
  "object_type" : "set",
  "target" : 2,
  "fields" : {
    "artist_id" : {
      "pending" : true,
      "id" : 5
    }
  }
}

{
  "action" : "create",
  "object_type" : "set",
  "fields" : {
    "artist_id" : {
      "pending" : true,
      "id" : 5
    },
    "venue_id" : {
      "pending" : false,
      "id" : 3
    }
  }
}

{
  "action" : "upvote",
  "pending_id" : 45
}
