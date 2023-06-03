This repository demonstrates a bug in PHPUnit, for the purpose of [issue #5403](https://github.com/sebastianbergmann/phpunit/issues/5403). Please refer to that.

---

Clone the repository:

```
git clone https://github.com/code-distortion/phpunit-bug.git .
```

Install dependencies:

``` bash
composer install
```

Run the tests with the `--filter=xxx` option to trigger the exception:

``` bash
./vendor/bin/phpunit --filter=test_something
```

---

| Tested with        | Version |
|--------------------|---------|
| PHPUnit            | 10.2.0  |
| OrchestraTestbench | v8.5.5  |
| PHP                | 8.2.6   |
