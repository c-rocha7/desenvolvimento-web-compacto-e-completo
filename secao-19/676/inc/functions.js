function response(sts, msg, affected_rows, data = null) {
    return {
        status: sts,
        message: msg,
        affected_rows: affected_rows,
        data: data,
        timestamp: new Date().getTime(),
    };
}

module.exports = {
    response,
};
