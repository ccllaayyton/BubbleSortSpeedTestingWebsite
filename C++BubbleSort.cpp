#include <chrono>
#include <fstream>
#include <iostream>
#include <string>
#include <vector>
#include <iomanip>
using namespace std;
using namespace std::chrono;

int main(int argc, char* argv[]) {
    int size;
    // Get command line input
    string fileName = argv[0];
    size = stoi(argv[2]);
    //Declare a vector of longs to store the numbers
    vector<long> numbers;

    // TODO: Read size numbers from numbers.txt
    ifstream fileIn;
    fileIn.open("numbers.txt");
    int fileSize = 0;
    int hold;
	while(fileIn && fileIn.peek() != EOF && fileSize<size){
		fileIn>>hold;
		numbers.push_back(hold);
		++fileSize;
	}
	fileIn.close();
	
	//Start timer
	auto start = std::chrono::high_resolution_clock::now();
    //Bubble Sort the vector
    int numPasses = 0, i,temp;
    bool haveSwapped = true;
    while (haveSwapped) {
        haveSwapped = false;
        for (i = 0; i+1 < numbers.size()-numPasses; ++i) {
            // Compare items at indices i and i+1 and swap if necessary
            if (numbers[i] > numbers[i+1]) {
                temp = numbers[i];
                numbers[i] = numbers[i+1];
                numbers[i+1] = temp;
                // Update haveSwapped
                haveSwapped = true;
            }
        }
        // Update numPasses
        ++numPasses;

    }
	//Stop timer
	double elapsed = duration_cast<milliseconds>(std::chrono::high_resolution_clock::now()-start).count();
    elapsed = elapsed/1000;
	cout<<elapsed<<" ";
    return 0;
}
