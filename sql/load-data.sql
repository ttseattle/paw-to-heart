load data local infile '/users/tishat/documents/winfo-hackathon/data/pets.csv'
into table pets
fields terminated by ','
optionally enclosed by '"'
lines terminated by '\n'
ignore 1 lines
(species, breed, color, gender, size, more, img, lost, found);