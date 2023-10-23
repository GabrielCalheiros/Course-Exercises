myInt = 7
myFloat = 3.14
myString = "Hello World!"
myString2 = 'Hello World!'
mystring = "Don't worry about apostrophes"

print("--------------------------------------")
print("An Integer: "+str(myInt))
print("An Float: "+str(myFloat))
print("An String: "+myString)
print("Another string: "+myString2)
print(mystring)

print("--------------------------------------")
# Assignments can be done on more than one variable "simultaneously" on the same line like this
a, b = 3, 4
print(a, b)


# As it says, %s (of string) is to replace a string, %f (of float) is to replace a float, and %d (of integer) is to replace an integer
print("--------------------------------------")
print("String: %s" % mystring)
print("Float: %f" % myFloat)
print("Integer: %d" % myInt)

