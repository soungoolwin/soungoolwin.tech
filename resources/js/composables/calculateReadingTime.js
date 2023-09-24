let calculateReadingTime = (content) => {
    // Count the number of words in the content
    const wordCount = content.split(/\s+/).length;

    // Calculate the estimated reading time (average of 200-250 words per minute)
    const readingTimeMinutes = Math.ceil(wordCount / 200); // You can adjust the division factor

    return `${readingTimeMinutes} min read`;
};

export default calculateReadingTime;
