let formatRelativeTime = (dateString) => {
    const currentDate = new Date();
    const inputDate = new Date(dateString);

    const secondsAgo = Math.floor((currentDate - inputDate) / 1000);
    const minutesAgo = Math.floor(secondsAgo / 60);
    const hoursAgo = Math.floor(minutesAgo / 60);
    const daysAgo = Math.floor(hoursAgo / 24);
    const monthsAgo = Math.floor(daysAgo / 30);

    if (monthsAgo >= 1) {
        return monthsAgo === 1 ? "1 month ago" : `${monthsAgo} months ago`;
    } else if (daysAgo >= 1) {
        return daysAgo === 1 ? "1 day ago" : `${daysAgo} days ago`;
    } else if (hoursAgo >= 1) {
        return hoursAgo === 1 ? "1 hour ago" : `${hoursAgo} hours ago`;
    } else if (minutesAgo >= 1) {
        return minutesAgo === 1 ? "1 minute ago" : `${minutesAgo} minutes ago`;
    } else {
        return secondsAgo === 1 ? "1 second ago" : `${secondsAgo} seconds ago`;
    }
};

export default formatRelativeTime;
