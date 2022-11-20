#Bubble Sort in Ruby
#https://stackoverflow.com/questions/11091434/using-the-bubble-sort-method-for-an-array-in-ruby
require 'time'
#argument 1 is the name of the file containing number to sort
fileName = ARGV[0]
#argument 2 is the number of items to be sorted 
numberToSort = ARGV[1]
#change argument 2 to a integer
numberToSort = numberToSort.to_i

#create an array and populate it with the numbers in the file
nums = Array.new()
nums = IO.readlines(fileName)

#convert all the items in the array to integers
for i in 0..nums.size do
	nums[i] = nums[i].to_i
end

#create a new array with the number of items to be sorted 
sorting = nums[0..numberToSort-1]

#start timer
start = Time.now()

#bubble sort logic
  swapped = true
  while swapped do
    swapped = false
    0.upto(sorting.size-2) do |i|
      if sorting[i] > sorting[i+1]
        sorting[i], sorting[i+1] = sorting[i+1], sorting[i] # swap values
        swapped = true
      end
    end    
  end
  
#stop time and calculate elapsed 
stop = Time.now()
elapsed = stop-start
elapsed = elapsed.round(3)
#output the elapsed time 
puts elapsed

