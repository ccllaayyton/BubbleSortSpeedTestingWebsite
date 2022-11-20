import time
import sys
#get CLI arguments 
fileName = sys.argv[1]
size  = sys.argv[2]
size = int(size)
# Read numbers from file
nums = []
with open(fileName) as file:
    # Make sure we only read in size integers
    nums = [int(next(file)) for x in range(size)]
#start timer
tic = time.time()

#Bubble sort algorithm
haveSwapped = True
maxIndex = len(nums) - 1
while haveSwapped:
    haveSwapped = False
    for i in range(maxIndex):
        if nums[i+1] < nums[i]:
            temp = nums[i]
            nums[i] = nums[i+1]
            nums[i+1] = temp
            haveSwapped = True
    maxIndex -= 1
        
#stop timer
toc = time.time()
elapsed = round(toc-tic, 4)

print(elapsed)

