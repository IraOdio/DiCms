export const log = (isNeedLogging = true) => {
    if (isNeedLogging){
        return function () {
            console.log(arguments);
        }
    }
    return function () {

    };
}
export const info = (isNeedLogging = true) => {
    if (isNeedLogging){
        return function () {
            console.info(arguments);
        }
    }
    return function () {

    };
}
export const warn = (isNeedLogging = true) => {
    if (isNeedLogging){
        return function () {
            console.warn(arguments);
        }
    }
    return function () {

    };
}
export const error = (isNeedLogging = true) => {
    if (isNeedLogging){
        return function () {
            console.error(arguments);
        }
    }
    return function () {

    };
}
export const table = (isNeedLogging = true) => {
    if (isNeedLogging){
        return function () {
            console.table(arguments);
        }
    }
    return function () {

    };
}
