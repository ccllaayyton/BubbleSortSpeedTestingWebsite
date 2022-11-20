# jmgottli-cschroe1-M2OEP
Clayton Schroeder and Jordan Gottilieb 

This project was inspired by the Speed Test guided project and aims to axpand the capabilities of that program by adding more language options. The idea is to create a program that can take user input to select the two programing languages to compare the sorting speeds for. The functionality is migrated to a website with a GUI coded in HTML where the user selects the two languages that they would like to compare. A different webpage with imbeded PHP calls the Bubble sort programs that the user selected using CLI commands. The resulting times are then displayed in a table. 

This project uses 5 different progrmaing languages(C++, PHP, Java, Python, Ruby) and 2 non programing languages(HTML, CSS). It also uses the CLI for file input transfer

This is the link to the webpage
`https://cschroe1.w3.uvm.edu/SpeedTestSite/SpeedSite.html`

We had started hoping to create a graph of the speeds using the matplotlib python library, however, we were not able to use matplot lib or any other plotting library since they were not installed on the silk server that we were using. Because of this we had to settle for a table to display the times side by side. Initially we were planning on doing 10 sorts each with 1000-10000 items but this took so long for some of the languages that the web page would time out. Instead we have done 5 sorts each with elements of 1000-5000

If we were to continue this project in the future we would like to request that matplotlib be properly installed on the server to implement this function. We would also like to implement even more programing languages. 

# Citations
The Ruby bubble sort algorithm came from https://stackoverflow.com/questions/11091434/using-the-bubble-sort-method-for-an-array-in-ruby

The Java bubble sort algorith came from https://stackabuse.com/bubble-sort-in-java/
