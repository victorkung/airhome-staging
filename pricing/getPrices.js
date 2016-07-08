$.getJSON("https://spreadsheets.google.com/feeds/list/1sjPCeA4qfnylOYaIzdtHBwR-VKMaYOJuMx8Qtd1DBfY/od6/public/values?alt=json-in-script&callback=", function(data) {
  //first row "title" column
  console.log(data.feed.entry[1]['gsx$title']['$t']);
});