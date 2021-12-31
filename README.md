Hello world,

MiningDataOnline is an initiative to build a simple to use platform intended for individuals without programming knowledge to build customizable web data warehouses designed to incentivize collection and sharing of structured data in exchange for micro payments.

Let me explain:

In order to understand what kind of problem I'm trying to solve, we must first understand the difference between structured and unstructured data.

Let's start with unstructured data: unstructured data are not organized in a pre-defined manner, and cannot be displayed in rows, columns and relational databases, that's why they are not easily searchable and they are not well suited for data analysis. It's estimated, that 80% of available data is unstructured.

Structured data on the other hand are organized in a pre-defined manner. They are easy to manage and are well suited for scientific search engines, data analysis, data visualization and automation, that is why some enterprises and institutions invest a significant amount of their resources (and in some cases even artificial intelligence) to have data available in a structured form.

Because most available data are unstructured, there is a certain unfulfilled demand for structured data.

Let me give you an example: let's say that you are a precious metals mining investor, and you want to know how much gold a certain gold mine in Ghana (owned by Newmont Mining Corp.) produced in the last 10 years. I'm sure that this data you are looking for are available in Newmonts website, and let's say that it would take you 5 minutes to find this 10 data in 10 different pdf files. What would you rather do in this case? Would you rather pay 1 cent to have access to this 10 data by a mouse click, or would you rather spend 5 minutes of your life digging into pdf files? And what if for 1 more cent you could view the historical chart of this 10 data? Don't forget, that humans are lazy by nature. Being a precious metals mining enthusiast myself, I'm currently building a web data warehouse specialized on searching and analysing data provided by the precious metals mining industry in exchange for micro-payments. Unfortunately there is something very important missing in my web data warehouse: data!

How the hell am I going to gather and sort significant amount of data (without access to sophisticated artificial intelligence software) and without a fortune to pay a company to do it for me? Precious metals mining doesn't provide big data, but it's definitely to much for a single person to collect. Here is my solution: create a mechanism that incentivize individuals to participate in the collection of data.

How?

Let's say that a person named Ricardo provided my web data warehouse with a certain data (for example the number of total ounces of gold produced in 2018 in the Ahafo gold mine). The web data warehouse will not only store the data, but it would also store the ethereum wallet address of Ricardo. Every time a person (or a machine) makes a micro-payment to access the data that was provided by Ricardo, a portion of the micro-payment is automatically transferred to Ricardos wallet, and the other portion would be transferred to the administrators wallet as a reward for building and maintaining the web data warehouse. Since Ricardo would earn only when the data is accessed by someone (or a machine), Ricardo would be interested in providing data that have higher probability of being demanded. Ricardo would be "co-owner" of the data he stored in this web data warehouse, and he would be rewarded as long as there is a demand for the data he provided. Now there is a problem: what if the data provided by Ricardo is wrong? In order to minimise this risk, the same data should be provided by at least 2 different individuals. The second person that provides this data should not be able to view the data provided by the first person until he (the second person) provides the data. This would avoid the risk of the second person just copy-pasting the data provided by the first person. The data would only be accessible by guests in case both data provided by those 2 individuals are equal. In case both data are different, it would be up to the web data warehouses administrator to choose the right one or to reject both. Those that provided wrong data would be penalised. In case both provided data are equal, the web data warehouse would consider the data to be correct, and future micro-payments to access this data would be divided in 3 pieces, that means, both individuals that provided the data and the web data warehouses administrator would each get a portion of the micro-payment. The level of data integrity could be increased by requiring more individuals to provide the same data, but this would result in higher cost for guests to access this data. This would only be interesting for data that requires high level of integrity.

While programming my web data warehouse, I noticed that it's quite tricky, specially for people with limited or with no programming knowledge.

In order to increase the number of individuals participating in the process of data collection, it's essential not only to incentivize individuals to provide data, but to also reduce the technical burden associated with developing such a web data warehouse.

My main objective is to build an open source web data warehouse platform that facilitates the development of personalised web data warehouses, with the functionality to charge (for accessing structured data) and reward (for providing data) using micro-payments on the raiden network payment system. This web data warehouses would be based on the LAMP bundle, and in addition it would use JavaScript to interact with the Raiden Payment Network. Web data warehouses built on top of the MiningDataOnline platform would be privately owned, and using the example above, Ricardo would have to trust the web data warehouse administrators promise to keep the web data warehouse up and running and to pay him a portion on the micro-payment every time the data that he provided is accessed by someone (or a machine) in the future. However, those centralised web data warehouses would give the average Joy the possibility to create value by providing structured data.

This web data warehouse platform would be an attempt to enable individuals to profit from the demand for structured data.

Let me give you an example:

Let's say, that Alex heard about MiningDataOnline and decides to use the platform to create a web data warehouse that provides data found in the nigerian constitution using an easy to use search engine for quick data access in exchange for a micro-payment. In this case the data would be the number of all chapters and every article of each chapter. Since Alex has experience in developing text reading software, Alex decides to collect the data himself. In this case Alex would own 100% share in the data stored in his own web data warehouse because he would not have to rely on Ricardo to insert the data. Let's say that many lawyers likes his search engine and asks him to do the same with all articles of all laws and regulations so that they can save time every time they want to find a certain article by making a micro-payment every time they access a certain article. Several months has passed, and Alex has collected all nigerian laws and regulations using his self made text reading software. Let's say that in average 1000 lawyers accesses 20 articles (per lawyer) per day, and they pay 0.1 Cent worth of Raiden Tokens per article. This would cost every lawyer an average of 2 cents per day, and Alex would receive in total a passive income of 20 dollars per day for the rest of his life, as long as the demand stays unchanged.

Let me give you another example:

Let's say that Konrad lives in a city that has no wetter station (somewhere in the wild west) and he built a wetter station using an arduino that measures and inserts the temperature (and the time of each measurement) in his web data warehouse that he built using the MiningDataOnline platform. A girl named Jeunisse that lives 50 km away built exactly the same thing because in her village there is also no wetter station. For some reason or another Alex needs to compare the temperature of those 2 cities in a certain period of time. Both data are in two different web data warehouses, so Alex came with a great idea. Alex created a scientific search engine designed to search structured data found in web data warehouses built on top of MiningDataOnline platform, most specifically Alex built a search engine that is specialised in searching wetter data (temperature, humidity, pressure, the time of each measurement, the coordinates of the sensor, etc.) from thousands web data warehouses based on the MiningDataOnline platform. Since developing search engines for structured data would be a quite simple task (because all web data warehouses built on top of MiningDataOnline platform would use the same standard), now thousands other people have decided to build search engines, but every search engine would be specialised on searching data of a certain category. Now people have the option to pay an extra fee to use search engines owned by individuals across the world to search structured data in multiple web data warehouses. The search engines would be a kind of marketplaces for buying and selling structured data.

In order for you to better understand what we are aiming to build, I have built a simple prototype (far from being complete). Here is a step by step tutorial on how to download and run the prototype:

https://www.youtube.com/watch?v=uKKeiPsYfls

Setting up the web data warehouse prototype using a simple example.

https://www.youtube.com/watch?v=ony7qJKSEgU

Github repository of the prototype:

https://github.com/MiningDataOnline/platform

What are the next steps?

Re-manufacture the code from scratch while paying special attention on security and “coding best practices” (not the case in the prototype presented!);

enable data configuration (for example: the owner could choose how much it should cost to access a certain data, who should have access to add and/or verify data, etc. etc.). Despite all those options the software should give a minimalist and simple to use feeling;

implement micro-payments for accessing data using raiden payment system. Raiden tokens will be set as the default payment token, but using other ERC-20 tokens should also be possible;

in the prototype, books consists only of pages. In the final product books will consist of chapters in witch the pages are found. Pages in the same chapter are all structured the same, but could the structure could differ from pages found in other chapters (it would depend on witch page template is chosen for each chapter). There should be at least 5 different page templates to increase the number of possible use cases (without having to touch the code). At least one of those templates would be designed to handle measurement data (voltage, temperature, etc.) provided by micro-controllers (starting with arduinos);

every shelf would have a simple (internal) search engine that would only have access to books located in the same shelf;

numeric data (including measurement data) visualisation should be made possible using charts;

a page of a book in a shelf should be able to import data found in another book (also books found in other shelves) in exchange for a micro-payment (from one shelf to another). Different shelves could be owned by different individuals;

develop a global scientific search engine that enables the end user to find and combine data found in pages of books located in different shelves;

MiningDataOnline will host (under sub-domains of miningdata.online) web data warehouses of users that are not willing to deal with web servers (technical stuff). It should be possible to create a web data warehouse by a mouse click;

MiningDataOnline would also provide service to those that want to personalise (modify) their web data warehouses (for whatever reason);

before the final product is launched, the code should be double-checked by a web security specialist;

implement it in the real world. This project is as close a blockchain can get to the real world;

Thanks for your attention!

Aurelio Schug
