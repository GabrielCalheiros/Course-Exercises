# Import the random module (not used in this code, can be removed)
import random

# Initialize the list with the first two Fibonacci numbers (1 and 1)
fibbonacci = [1, 1] 

# Loop to calculate the next Fibonacci numbers
for i in range(2, 10):
    # Calculate the next Fibonacci number by adding the previous two
    next_fib = fibbonacci[i - 1] + fibbonacci[i - 2]

    # Append the calculated Fibonacci number to the list
    fibbonacci.append(next_fib)

# Print the generated Fibonacci sequence
print(fibbonacci)

