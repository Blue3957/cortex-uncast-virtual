# cortex-uncast-virtual

Minimal example of my issue with virtual fields on Cortex

## Steps

1. Clone the repository
2. run `composer install`
3. create an empty db and edit the db constructor in `index.php`
4. serve the app in your preferred way
5. access the `/setup` url to setup and populate the tables
6. access the `/` url and you'll be able to notice that the `virtual_two` and `virtual_three` fields are instances of `Cortex` and `CortexCollection` respectively. Ideally I'd want them to be arrays, just like the `two` and `three` fields.
