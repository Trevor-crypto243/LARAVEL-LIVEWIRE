https://www.youtube.com/watch?v=PzPo5Ky2mRc
https://flowbite.com/


-Installation and set up
-Components
--Properties
-Forms, Live Validation & Loaders
-Actions
-Flash Messages
-Events
-Lifecycle Hooks


23:19
Buitl with laravel and alpine Js 
Can handle server side rendering - UI components rendered on server and sent to client as html
    -Improves performance
    -Enhances security
Reduces logic unlike react or vue


Alpine js
    -Laravel framework
    -Provides interactivity to livewire without writing separate javascript code
    -Lightweight
    -Easy to use
    -Conditional rendering
    -Data binding
    -Event handling
    

Laravel Livewire CRUD Application
-Create project
    composer create-project --prefer-dist laravel/laravel your-project-name

-Install livewire
    composer require livewire/livewire "^3.0@beta"


php artisan livewire:publish --config
-publishing the livewire configuration


Components
    -reusable UI elements
    -pascal case
    -kebab case

    php artisan livewire:make
    php artisan livewire:make tasks.TaskCreate
        -creating in a sub directory

    livewire components can only have a single root element
    all html in a component must be wrapped in a single parent component

Component class
    -defines behaviour and presentation of your livewire component
    -Handle user interaction
    -render component view

Full page components
    -can build stand alone pages with logic and views
    -need to be registered in routes directory
    -use default application layout
    -You can change this in the livewire config

Registering livewire components

passing additional data to views without actually defining a property for it     
using the "->with()" method



Properties
-Help us store and manage data specific component
-Allow yus create dynamic components by binding  properties to input fields
-Easily capture user input
-Display data from the backend
-Manage data within livewire components
-defined right below the class definitions
-passing props to components
    <x-task-item :task="$task"/>



mount()
-it is only called once
-constructor of a laravel livewire component
-allows us perform initialisation logic when a livewire compoennt is first loaded
    e.g retrieving data from a database
    setting initial property values
    performing any other neccesary set up for the component



Data binding
-esatblish connection between the data in your livewire component and the user interface element in your view
-Capture user input and update component data without manually handling the events
wire:model
    -used for data binding
    -establishes connection btwn UI element and a property in our livewire component

wire:click
    -binds a javascript click event to a livewire component method


Route Parameters
-route model binding
-  

Wire object
    -refers to the instance of a livewire component itself
    -provides access to various properties and methods that can be used in a livewire component
    -it is exposed to alpine.js which you can access inside your component

Forms, Live validations and Loaders 
    -passing actions as variables to enhance the reusability of components

Validations
    -are added above the variable declarations using the rule attribute
    -validation errors
        adding model.live or model.blur to show live errors
        sends network requests to the backend
    -loading indicators 
        use component from flowbite


Wire:confirm directive
Livewire supports a total of 7 different event listeners out of the box

wire:keydown
    -listens for keyboard events on an element
wire:keyup
    -when we stop pressing 
wire.mouseenter

Flash Messages
-temporary messages stored in the sessions and displayed to the user after a specific action has been performed
-provide feedback and notification to the user such as success messages, error messages or informative messages
-They are stored in sessions

session method
-helper method
-allows us to interact with our sesssion data

Events
    -Way to communicate between components
    -handle component specific actions
    -dispatch
    -notifying other componentys listening for this event


LifeCycle Hooks
    -executed automatically by livewire
    -perfrom actions based on the lifecycle
    -They are six in total
    -initialising data
    -Making api calls
    -Accesing data