# Bubble Sort Speed Testing Website 

The idea behind this project was to try to utilize as many different programing languages in the same program as possible. To do this I created a program that can take user input to select two programing languages and compare their sorting speeds. The functionality is built on a silk server a GUI coded in HTML where the user selects the two languages that they would like to compare. A different webpage with imbeded PHP calls the Bubble sort programs that the user selected using CLI commands. The resulting times are then displayed in a table. 

This project uses 5 different progrmaing languages(C++, PHP, Java, Python, Ruby) and 2 non programing languages(HTML, CSS). It also uses the CLI for file input transfer

This is the link to the webpage
`https://cschroe1.w3.uvm.edu/SpeedTestSite/SpeedSite.html`

The initial hope was to create a graph of the speeds using the matplotlib python library, however, I was not able to use matplot lib or any other plotting library since they were not installed on the silk server being using. Because of this I had to settle for a table to display the times side by side. The initial plan was to do 10 sorts each with 1000-10000 items but this took so long for some of the languages that the web page would time out. Instead we have done 5 sorts each with elements of 1000-5000

If we were to continue this project in the future we would like to request that matplotlib be properly installed on the server to implement this function. We would also like to implement even more programing languages. 

# Citations
The Ruby bubble sort algorithm came from https://stackoverflow.com/questions/11091434/using-the-bubble-sort-method-for-an-array-in-ruby

The Java bubble sort algorith came from https://stackabuse.com/bubble-sort-in-java/
