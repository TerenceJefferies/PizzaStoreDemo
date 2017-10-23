# PizzaStoreDemo
A demonstration of how you might create a pizza store website in Laravel

## Status
This application has been created for the purposes of demonstration and is an ongoing project.

## Theory behind the design
The decision behind the this design was to split it up into levels of "Granularity" - A recurring theme throughout my career is a clients 
need to be able to alter the granularity of a new rule governing their website, requesting change at a product level all the way down to a minor product attribute level,
something that I have always thought of as a primary concern when designing a new application is the ability to take these sorts of requests in stride, having an 
application designed in such away that allows for these sweeping changes while still having the level of granularity to pay attention to the minor details, without
upsetting the code in such a way that it becomes impossible to maintain has to be the ultimate goal for any new application.

With that in mind, I have put together the beginings of this pizza store in such a manner that would allow for product-wide changes, as well as product detail changes.
The Pizza class is a prime example, client requests that require pizzas to behave differently than other products are easily achievable in beginings of this project,
similarly, changes that require all produts to, for example, contain a registered trade-mark symbol at the end of their name, is also easily achievable. I believe
this project is on it's way to becoming a well-designed, de-coupled and manageable application.
