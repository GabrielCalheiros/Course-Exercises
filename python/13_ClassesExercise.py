# define the Vehicle class
class Vehicle:
    name = ""
    kind = "car"
    color = ""
    value = 100.00
    def description(self):
        desc_str = "%s is a %s %s worth $%.2f." % (self.name, self.color, self.kind, self.value)
        return desc_str

Car1 = Vehicle()
Car1.name = "Fer"
Car1.color = "red"
Car1.kind = "convertible"
Car1.value = 80000


Car2 = Vehicle()
Car2.name = "Jump"
Car2.color = "blue"
Car2.kind = "van"
Car2.value = 60000


# test code
print(Car1.description())
print(Car2.description())