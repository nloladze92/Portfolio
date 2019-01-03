# Nik Loladze's Porftolio
> A combination of projects in cryptocurrency.

[![Solidity Version][0.4.17]
[![NPM Version][npm-image]][npm-url]

[!(https://ibb.co/g9W5VS8)](https://nodejs.org/en/download/)

[![Build Status][travis-image]][travis-url]
[![forthebadge](https://forthebadge.com/images/badges/certified-snoop-lion.svg)](http://forthebadge.com)

No. 1 Solidity ~ Contracts written in solidity, with three contracts written: a simple Inbox display to screen, a more complex Lottery contract and a sophisticated Kickstarter contract with a factory contract attached to it. Includes a rudimentary Youtube React API and a React implementation of the lottery contract. Details for how to plug in and interact with the Kickstarter contract and API are detailed below. 

No. 2 Node Blockchain ~ is a complete blockchain; with capabilities to increase difficulty, with a wallet, balance and transaction pool. Allows peers to connect and manually mine blocks. Not integrated with miners however but with POST requests can handle mining of a block and has a shared ledger through the longest chain. 

No. 3 Python blockchain does not have a transaction pool but implements much the same proof of work as the Node Blockchain (requiring the correct hash with four leading zeros for ease of mining). The Python blockchain manually requires sending transactions through RAW JSON as well as the inputs of the nodes in RAW JSON. Uses Flask to act as an HTTP server, use Postman to interact with the contract. Details below. 

____________________________________________________________

No. 4 ~ My background includes webwork for my cryptocurrency company Ohni, which was started in August of 2017. Relevant links can be found on my resume. The website was an ASP.net pages MVC model. Outdated CSS with no modern front-end tools, somewhat impressive nonethless consider the time put into it.

No. 5 ~ This is where I learned to code through repetition in the early 2010s. A Dreamweaver IDE was used to build a PHP site with old school javascript, CSS and HTML. Took 14 months and at one time worked with the Google Maps API. Used Smarty for templating and off the wall images for design. I affectionally call it the Myspace era of coding. 

Unfortunately I am unable to add the Ruby work I did here back in very early 2013.

## Kickstarter Solidity Course

![](/Pictures/Kickstater.jpg)

To Setup:
1. Clone Repo [Here](https://github.com/dbader/)
2. CD into directory
3. Install dependencies (`npm install`)
4. Run the program (`npm run dev`)
5. Navigate to localhost 3000 (<http://localhost:3000/>)

## Release History

* Create
    * CHANGE: Update docs (module code remains unchanged)
* 0.2.0
    * CHANGE: Remove 
    * ADD: Add `init()`
* 0.1.1
    * FIX: Crash when calling `baz()` (Thanks @GenerousContributorName!)
* 0.1.0
    * The first proper release
    * CHANGE: Rename `foo()` to `bar()`
* 0.0.1
    * Work in progress

Clone Repo Here
CD into directory
```sh
npm install

then:

npm run dev

Navigate to 
```

Windows:

```sh
edit autoexec.bat
```

## Usage example

A few motivating and useful examples of how your product can be used. Spice this up with code blocks and potentially more screenshots.

_For more examples and usage, please refer to the [Wiki][wiki]._

## Development setup

Describe how to install all development dependencies and how to run an automated test-suite of some kind. Potentially do this for multiple platforms.

```sh
make install
npm test
```



## Meta

Your Name – [@YourTwitter](https://twitter.com/dbader_org) – YourEmail@example.com

Distributed under the XYZ license. See ``LICENSE`` for more information.



## Contributing

1. Fork it (<https://github.com/yourname/yourproject/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

<!-- Markdown link & img dfn's -->
[npm-image]: https://img.shields.io/npm/v/datadog-metrics.svg?style=flat-square
[npm-url]: https://npmjs.org/package/datadog-metrics
[npm-downloads]: https://img.shields.io/npm/dm/datadog-metrics.svg?style=flat-square
[travis-image]: https://img.shields.io/travis/dbader/node-datadog-metrics/master.svg?style=flat-square
[travis-url]: https://travis-ci.org/dbader/node-datadog-metrics
[wiki]: https://github.com/yourname/yourproject/wiki
