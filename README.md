# svoboda-diaries-word-search

A tool for the [Svoboda Diaries](https://depts.washington.edu/svobodad/) transcribers at NELC, which will assist them to search for partial words and get most commonly used words in the previous diaries. It will substantially reduce transcribing time and misspelt words/mistakes.

**Online: [http://wl.anotchortwo.com/](http://wl.anotchortwo.com/)**

Written in PHP and SQL.

Styled using Bootstrap v4.2.1.

words-sql.txt has been provided to quickly add all words to your SQL table.

## Usage

### Example Searches

- **svo%** 	  Finds any values that start with "svo"

- **%oda** 	  Finds any values that end with "oda"

- **%obo%** 	Finds any values that have "obo" in any position

- **s%a** 	  Finds any values that starts with "s" and ends with "a"

- **s_o%** 	  Finds any values that has "s" at the first position and and "o" at the third position

### Please Note:

- **%** : The percent sign represents zero, one, or multiple characters

- **_** : The underscore represents a single character

## Thanks
[@cha-ita-nya](https://github.com/cha-ita-nya) for hosting a version online.

## Copyright and license
This work is licensed under a [Creative Commons Attribution-NonCommercial-ShareAlike 4.0 International License](http://creativecommons.org/licenses/by-nc-sa/4.0/).
