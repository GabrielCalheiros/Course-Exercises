let featuredPosts = [
    "First Post",
    "Second Post",
    "Third Post",
    "Fourth Post",
    "Fith Post"
];

featuredPosts[5] = "New Post";
featuredPosts.push("New Post 2");
featuredPosts.push("To be deleted");
featuredPosts.pop();

let i = 0;
while(i <  featuredPosts.length){
    console.log(featuredPosts[i]);
    i++;
}
