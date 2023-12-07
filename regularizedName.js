function regularizeNames(names) {
    const regularizedNames = names.map(name => {
        const trimmedName = name.trim();
        
        // Diviser le nom en parties en fonction des espaces
        const nameParts = trimmedName.split(/\s+/);

        // Mettre la première lettre de chaque partie en majuscule
        const capitalizedParts = nameParts.map(part => part.charAt(0).toUpperCase() + part.slice(1).toLowerCase());

        // Joindre les parties avec des espaces simples
        return capitalizedParts.join(' ');
    });

    // Joindre les noms avec des virgules si la longueur est supérieure à un
    const result = regularizedNames.length > 1 ? regularizedNames.join(' , ') : regularizedNames.join(' ');

    return result;
}

// Exemple d'utilisation
const namesArray = [" monsieur \t rogers ", "tim smith"];
const resultString = regularizeNames(namesArray);
console.log(resultString);
