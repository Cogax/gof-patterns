package newspaper.nzz;

import newspaper.api.NewspaperAppClient;

public class NZZAndroidClient implements NewspaperAppClient {
    public void update() {
        System.out.println("This is a android notification from nzz!");
    }
}
