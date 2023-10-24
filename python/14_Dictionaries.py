phonebook = {}
phonebook["John"] = 938477566
phonebook["Jack"] = 938377264
phonebook["Jill"] = 947662781
phonebook["Jane"] = 947532457
phonebook["Bill"] = 938377264
phonebook["Jowell"] = 947662781
phonebook["Jan"] = 947532457

# Alternatively, a dictionary can be initialized with the same values in the following notation:
phonebook2 = {
    "John" : 938477566,
    "Jack" : 938377264,
    "Jill" : 947662781,
    "Jane" : 947532457,
    "Bill" : 938377264,
    "Jowell" : 947662781,
    "Jan" : 947532457
}

print(phonebook)
print(phonebook2)
print("-----------------------------------------------------")


# Iterating over dictionaries
for name, number in phonebook.items():
    print("Phone number of %s is %d" % (name, number))

print("-----------------------------------------------------")
for name, number in phonebook2.items():
    print("Phone number of %s is %d" % (name, number))


# Removing a value
print("-----------------------------------------------------")
print("Removing from dictionaries:")
del phonebook["John"]
phonebook2.pop("John")
print(phonebook)
print(phonebook2)

# Exercise
del phonebook["Jill"]
phonebook["Jake"] = 938273443



print(phonebook)