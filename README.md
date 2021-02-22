# Take home test (Full stack) Laravel 8, Inertia.js and Vue 3


## Step 1
- using the free (Tailwind UI components)[https://tailwindui.com/preview]
- Build a home page that shows the upcoming events in a table that is paginated.
- The table should have the ability to search the events based on event name and category
- The table should ability to filter the events to a date range
- Create a link on the hope page to allow users to submit a new event, users need to be registered to do submit events
-
## Step 2
- Refactor the Input.vue component to use the new Vue 3 composition API, ***bonus points if you are able to use a hook for watching the value change***
- Events submitted need to be hidden from the home page until they’re approved, so admin users should be able to see the events submitted and approve them as needed
- Admin should be able to delete events, but in doing so they should see a model confirming they want to actually delete the event.

## Things we are looking for.

### Backend
- knowledge querying the data using Eloquent , leveraging scopes and making the most efficient queries possible.
- ability to create a schema based on the criteria
- write tests to show things work for both backend and the Inertia side using [claudiodekker/inertia-laravel-testing](https://github.com/claudiodekker/inertia-laravel-testing)

