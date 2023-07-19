export const countJobsPerMonth = (jobs) => {
    const countPerMonth = {};
    const resPerMonth = {};

    getCountsPerMonth(jobs, countPerMonth, resPerMonth);

    let counts = [];
    let responseCounts = [];

    for (let i = 0; i < 12; i++) {
        const monthKey = (i + 1).toString().padStart(2, "0");
        const count = countPerMonth[`2023-${monthKey}`] || 0;
        const responseCount = resPerMonth[`2023-${monthKey}`] || 0;

        counts.push(count);
        responseCounts.push(responseCount);
    }

    return { counts, responseCounts };
};

const getCountsPerMonth = (jobs, countPerMonth, resPerMonth) => {
    jobs.forEach((job) => {
        const createdAt = job.created_at.split(" ")[0];
        const [year, month] = createdAt.split("-");
        const key = `${year}-${month}`;
        countPerMonth[key] = (countPerMonth[key] || 0) + 1;

        if (job.status === "interviewed") {
            resPerMonth[key] = (resPerMonth[key] || 0) + 1;
        }
    });
};

export const countInterviews = (jobs) => {
    let output = 0;

    jobs.forEach((job) => {
        if (job.status == "interviewed") {
            output += 1;
        }
    });

    return output;
};
