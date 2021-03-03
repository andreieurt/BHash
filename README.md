# BHash

## What is BHash?

BHash comes from Binary Hashing which hashes the input into a binary form of it. An example of hashing is:

```
"123456" => "10001101001111001100101110101101101110001101001111001100101110101101101110001101001111001100101110101101101110001101001111001100"
```
In my opinion, this hasing system is very safe and unbreakable because it's combining characters into binary system and you can't know which represents 1 and which represents 0.
Maybe isn't unbreakable, maybe not, but we will find out in time.

## Usage

To use it you need to call `Hash` stock.

```pawn
#include <BHash>

new password[32] = "andrewsebastian";

printf(Hash(password)); // The stock Hash returns by default 129 characters, which 128 of them are the hash and the last one is a null char. 
```

The hash of `andrewsebastian` will return `10000110111011001001101001111010011111011111001111010011010001110000111100111001011110010111000011011101110000110111011001001101`

## Author

The author for this script is Andrew Sebastian "SkuZZi" which lives in Romania.
