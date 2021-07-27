Karting's API
=============
Simple API with minimal dependencies.


## Run
```bash
$ php -S localhost:8000 -t public
```


## Test
```bash
$ curl localhost:8000/ping
pong
```

## Development Decisions
### Minimal dependencies
The simpler the better.
Let's avoid frameworks which bundle a ton of things we do not need.
Let's use libraries whose purpose is well-defined and with limited scope.