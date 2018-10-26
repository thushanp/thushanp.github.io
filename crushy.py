# begin the table
f = open('theanswer.txt','w')

print("<table>", file=f)

# column headers
# print("<th>", file=f)
# print("<td>Last Name</td>", file=f)
# print("<td>First Name</td>", file=f)
# print("<td>Year</td>", file=f)
# print("<td>Graduation Year</td>", file=f)
# print("<td>Position</td>", file=f)
# print("<td>Email</td>", file=f)
# print("<td>Employer</td>", file=f)
# print("<td>Occupation</td>", file=f)
# print("<td>City</td>", file=f)
# print("<td>Alternate Email</td>", file=f)
# print("<td>Phone</td>", file=f)
# print("<td>LinkedIn</td>", file=f)
# print("</th>", file=f)

infile = open("alumnidatabase.csv","r")

for line in infile:
    row = line.split(",")
    last = row[0]
    first = row [1]
    year = row[2]
    graduation = row[3]
    position = row[4]
    email = row[5]
    employer = row[6]
    occupation = row[7]
    city = row[8]
    alternate = row[9]
    phone = row[10]
    linkedin = row[11]

    print("<tr>", file=f)
    print("<td>%s</td>" % last, file=f)
    print("<td>%s</td>" % first, file=f)
    print("<td>%s</td>" % year, file=f)
    print("<td>%s</td>" % graduation, file=f)
    print("<td>%s</td>" % position, file=f)
    print("<td>%s</td>" % email, file=f)
    print("<td>%s</td>" % employer, file=f)
    print("<td>%s</td>" % occupation, file=f)
    print("<td>%s</td>" % city, file=f)
    print("<td>%s</td>" % alternate, file=f)
    print("<td>%s</td>" % phone, file=f)
    print("<td>%s</td>" % linkedin, file=f)
    print("</tr>", file=f)

# end the table
print("</table>", file=f)