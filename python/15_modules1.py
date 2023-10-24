
import re
# This line imports the re module as a whole into your current namespace. 
# It makes the re module and all its symbols accessible by prefixing them with the module name

find_members = []
for member in dir(re):
    if "find" in member:
        find_members.append(member)

print(sorted(find_members))