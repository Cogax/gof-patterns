package newspaper.newYorkTimes;

import newspaper.api.NewspaperAppClient;

public class NewYorkTimesAndroidClient implements NewspaperAppClient {
    public void update() {
        System.out.println("This is a android notification from new york times!");
    }
}
