x = 2
print(x == 2) # prints out True
print(x == 3) # prints out False
print(x < 3) # prints out True

name = "John"
age = 23


if name == "John" and age == 23:
    print("Your name is John, and you are also 23 years old.")

if name == "John" or name == "Rick":
    print("Your name is either John or Rick.")

# The "in" operator could be used to check if a specified object exists within an iterable object container
if name in ["John", "Rick"]:
    print("Your name is either John or Rick.")

statement = False

if statement is True:
    # do something
    pass

x = 2
if x == 2:
    print("x equals two!")
else:
    print("x does not equal to two.")