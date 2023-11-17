def foo(first, second, third, *therest):
    print("First: %s" %(first))
    print("Second: %s" %(second))
    print("Third: %s" %(third))
    print("And all the rest... %s" %(list(therest)))

foo(1, 2, 3, 4, 5, 6, 7, 8, 9, 10)

def bar(first, second, third, **options):
    
    if options.get("action") == "sum": # If the action is "sum"
        print("The sum is: %d" %(first + second + third)) # Print the sum

    if options.get("number") == "first": # If the number is "first"
        return first # Return the first number

result = bar(1, 2, 3, action = "sum", number = "first") # Call the function

print("Result: %d" %(result)) # Print the result

