# Overview
This is a generic calculator that uses the Twig expression engine to perform calculations. We would like for you to improve it in your own way, so it could be used by a customer to perform test calculations using their own expressions.

This test is based on a production-deployed solution that our customers use daily: the [AlisQI Expression Engine](https://help.alisqi.com/advanced-calculations)

# Scope
Included is a simple `calculator.php` script, which sets up the Twig environment and runs a few example calculations.

Using your best judgement, reimplement this functionality to:
* Allow a user to input their own expressions and values in a frontend
* Adopt OOP principles (either a framework or your own implementation)
* Perform unit testing

See [the AlisQI Stack](#the-alisqi-stack) for what we use.

# Considerations and Tips
* Consider what happens if a user inputs invalid values
* Complex queries, how they may affect the backend application
* Could results be saved or cached in any way?
* Security considerations -- what are the risks and how can you mitigate them?

# The AlisQI Stack
How you build your solution is entirely up to you! For reference, here is our stack:
* PHP 8
* MariaDB 11
* Redis
* Twig + Hotwire + Stimulus
* Symfony Components
* Docker

# Delivering your solution
## Github
Create a private repository, and invite [@chemicalstrawberry](https://github.com/chemicalstrawberry) as a read-only participant.

## Email
Zip/Tarball your project folder (don't forget to include your `.git` folder!), and email it to [james@alisqi.com](james@alisqi.com).

