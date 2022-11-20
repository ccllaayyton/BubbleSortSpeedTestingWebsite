//https://stackabuse.com/bubble-sort-in-java/
import java.io.*;
import java.util.Scanner;
import java.util.ArrayList;

 public class JavaBubbleSort{
 
// Driver program to test above functions
public static void main(String [] args) throws FileNotFoundException{
	
	//Get command line arguments for Size and file name
	String fileName = args[0];
	String numberToSort = args[1];
	int intNumbersToSort = Integer.parseInt(numberToSort);
	 try
    {
		//Read numbers in from file
		File file = new File(fileName);
		Scanner read = new Scanner(file);
		String holding;
		int intoArray;
		ArrayList<Integer> nums=new ArrayList<Integer>();
		for(int i =0; i<intNumbersToSort; i++){
			holding = read.nextLine();
			intoArray = Integer.parseInt(holding);
			nums.add(intoArray);
		}
		
		//start timer
		long start = System.currentTimeMillis();
		
		//Bubble Sort algorithm 
		boolean sorted = false;
		int temp;
		while (!sorted) {
			sorted = true;
			for (int i = 0; i < nums.size()-1; i++) {
				if (nums.get(i)>(nums.get(i + 1))) {
					temp = nums.get(i);
					nums.set(i, nums.get(i + 1));
					nums.set(i + 1, temp);
					sorted = false;
				}
			}
		}
		
		//Stop timer
		long end = System.currentTimeMillis();
		long elapsed = end - start;
		double d = (double)elapsed;
		d = d/1000;
		System.out.println(d);	
	}
	catch(FileNotFoundException ex)
	{
		System.out.println("File Not Found");
	}

}
}